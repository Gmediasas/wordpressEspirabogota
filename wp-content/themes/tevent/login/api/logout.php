<?php
@session_start();
session_destroy();
header("Location: http://localhost/espiraBogota/iniciar-sesion/");
//header("Location: http://entornopre.gevents.co/iniciar-sesion/");
