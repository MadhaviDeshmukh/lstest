<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php if($row):?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style type="text/css">
        body {
          background-color: #fff;
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          color: #111111;
          font-size: 14px;
          margin: 0;
          padding: 0
        }
        hr{
            margin-top: 3px;
            margin-bottom: 3px;
        }

        #education {
            border-collapse: collapse;
            width: 100%;
        }

        #education td, #education th {
            border: 1px solid #bbb;
            padding: 8px;
        }

        #education th {
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: left;
            background-color: #111111;
            color: white;
        }

        #experience li{
            margin-bottom: 20px;
        }

        #responsibilities{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr width="100%">
            <td width="100%">
                <h2><?php echo $row->fullname; ?></h2>
                <span style="font-size: 16px;"><?php echo $row->title; ?></span>
                <br><br>
                <address>
                    <?php echo $row->present_address; ?><br>
                    <?php echo $row->city; ?>
                    <?php echo ($row->state) ? ", " . $row->state : ""; ?>
                    <?php echo ($row->country) ? ", " . $row->country : ""; ?>
                </address>
                Email: <?php echo $row->email; ?><br>
                Phone: <?php echo $row->phone; ?><br>
                Website: <?php echo $row->website; ?>
            </td>
            <td width="150" text-align="right">
                <img src="<?php echo AVATARS  . $row->avatar; ?>" align="right" alt="<?php echo $row->fullname; ?>" height="150" width="150">
            </td>
        </tr>
    </table>
    <br>
    <br>

    <h4 style="margin-bottom:0;">Career Objective</h4>
    <hr>
    <?php echo $row->objective; ?>
    <br>
    <br>

    <h4 style="margin-bottom:0;">Skills</h4>
    <hr>
    <?php $jobs->getJobSkills($row->skills); ?>
    <br>
    <br>

    <h4 style="margin-bottom:0;">Experience</h4>
    <?php $experience = unserialize($row->experience); ?>
    <hr>
    <ul id="experience">
        <?php foreach( $experience as $key=>$value ): ?>
            <?php if($value['company'] != ''): ?>
                <li>
                    <b><?php echo $value['designation']; ?></b> <br>
                    <?php echo $value['company']; ?><br>
                    From <?php echo $value['start'] . ' to ' . $value['end']; ?><br>
                    Responsibilies:<br>
                    <span id="responsibilities"><?php echo cleanOut($value['notes']); ?></span>
                    <br><br>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h4 style="margin-bottom:0;">Education</h4>
    <?php $education = unserialize($row->education); ?>
    <hr>
    <table id="education" width="100%" border="1" bordercolor="black" bordercollapse="collapse">
        <thead>
            <tr>
                <th>Exam/Degree</th>
                <th>Institute</th>
                <th>Year</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $education as $key=>$value ): ?>
                <?php if($value['name'] != ''): ?>
                    <tr>
                        <td><?php echo $value['degree']; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['year']; ?></td>
                        <td><?php echo cleanOut($value['notes']); ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>

    <h4 style="margin-bottom:0;">Portfolio</h4>
    <?php $portfolio = unserialize($row->portfolio); ?>
    <hr>
    <ul>
        <?php foreach( $portfolio as $key=>$value ): ?>
            <?php if($value['name'] != ''): ?>
                <li><b><?php echo $value['name']; ?></b> - <?php echo $value['url']; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    <br>
    <br>

    <h4 style="margin-bottom:0;">Personal Information</h4>
    <hr>
    <table>
        <tbody>
            <tr>
                <td>Facebook</td>
                <td>:</td>
                <td><?php echo $row->facebook; ?></td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td>:</td>
                <td><?php echo $row->twitter; ?></td>
            </tr>
            <tr>
                <td>Linkedin</td>
                <td>:</td>
                <td><?php echo $row->linkedin; ?></td>
            </tr>
            <tr>
                <td>Google Plus</td>
                <td>:</td>
                <td><?php echo $row->gplus; ?></td>
            </tr>
            <tr>
                <td>Present Address</td>
                <td>:</td>
                <td><?php echo $row->present_address; ?></td>
            </tr>
            <tr>
                <td>Permanent Address</td>
                <td>:</td>
                <td><?php echo $row->permanent_address; ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>

    <h4 style="margin-bottom:0;">References</h4>
    <?php $references = unserialize($row->references); ?>
    <hr>
    <?php foreach( $references as $key=>$value ): ?>
        <?php if($value['name'] != ''): ?>
            <b><?php echo $value['name']; ?></b><br>
            <?php echo $value['profession']; ?> <br>
            Email: <?php echo $value['email']; ?><br>
            Phone: <?php echo $value['phone']; ?> <br><br>

        <?php endif; ?>
    <?php endforeach; ?>

</body>
</html>
<?php else:?>
<?php die('<h1 style="text-align:center">You have selected invalid resume</h1>');?>
<?php endif;?>
