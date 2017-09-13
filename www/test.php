
<?php
  require_once("../lib/_autoload.php");
  $as = new SimpleSAML_Auth_Simple('default-sp');
  $as->requireAuth();
  $attributes = $as->getAttributes();
?>
<div style="font-weight: bold;">Hello, PHP World</div>
<table border="1">
    <?php  foreach ($attributes as $key => $value): ?>
        <tr>
            <td><?=$key;?></td>
            <td><?=$value[0];?></td>
        </tr>
    <?php endforeach;?>
</table>