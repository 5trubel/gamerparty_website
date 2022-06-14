<?php

?>
<span>
        
        <a style="font-weight: 600;">Gamerparty Server Status Feed:</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a>GP-Teamspeak: </a><a style="color:var(--success);">Online</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
        echo "<a>TTT: </a><a class=\"".strtolower($status["ttt"]["status"])."\">".$status["ttt"]["status"]."</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a>Insurgency: </a><a class=\"".strtolower($status["ins"]["status"])."\">".$status["ins"]["status"]."</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a>ArmA 3: </a><a class=\"".strtolower($status["arma"]["status"])."\">".$status["arma"]["status"]."</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>

