<?php
@session_start();
session_destroy();
header("Location: http://transformabogota40.gevents.co/iniciar-sesion/");
