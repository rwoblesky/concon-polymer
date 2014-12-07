<?php
/**
* Copyright (C) 2013 peredur.net
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
require_once($_SERVER['DOCUMENT_ROOT']."/php/includes/db_connect.php");
require_once($_SERVER['DOCUMENT_ROOT']."/php/includes/functions.php");
sec_session_start();
?>
<!doctype html>
<html>
  <head>
    <title>ConCon</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <!--Polymer Scripts-->
    <script src="components/webcomponentsjs/webcomponents.js"></script>
    <script src="js/libs/jquery.min.js"></script>
    <link rel="import" href="elements/app-globals/app-globals.html">

    <!--Polymer Components Imports-->
    <link rel="import" href="components/font-roboto/roboto.html">
    <link rel="import" href="components/core-drawer-panel/core-drawer-panel.html">
    <link rel="import" href="components/core-drawer-panel/core-drawer-panel.html">
    <link rel="import" href="components/core-toolbar/core-toolbar.html">
    <link rel="import" href="components/core-header-panel/core-header-panel.html">
    <link rel="import" href="components/core-icons/core-icons.html">
    <link rel="import" href="components/core-pages/core-pages.html">
    <link rel="import" href="components/core-overlay/core-overlay.html">
    <link rel="import" href="components/core-image/core-image.html">
    <link rel="import" href="components/core-scaffold/core-scaffold.html">
    <link rel="import" href="components/core-menu/core-menu.html">
    <link rel="import" href="components/core-item/core-item.html">
    <link rel="import" href="components/core-dropdown/core-dropdown.html">
    <link rel="import" href="components/core-dropdown-menu/core-dropdown-menu.html">
    <link rel="import" href="components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="components/paper-shadow/paper-shadow.html">
    <link rel="import" href="components/paper-input/paper-input.html">
    <link rel="import" href="components/paper-fab/paper-fab.html">
    <link rel="import" href="components/paper-button/paper-button.html">
    <link rel="import" href="components/paper-slider/paper-slider.html">

    <link rel="import" href="components/paper-dropdown/paper-dropdown.html">
    <link rel="import" href="components/paper-menu-button/paper-menu-button.html">
    <link rel="import" href="components/paper-item/paper-item.html">
    <link rel="import" href="components/paper-dropdown-menu/paper-dropdown-menu.html">
    <!--My Elements, must go in order evoked! Deepest element evoked first-->

    <link rel="import" href="elements/log-workout/log-workout.html">
    <link rel="import" href="elements/log-exercise/log-exercise.html">
    <link rel="import" href="elements/exercise-list/exercise-list.html">
    <link rel="import" href="elements/dash-board/dash-board.html">
    <link rel="import" href="elements/main-element/main-element.html">

    <!--MyStyle-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body fullbleed>
    <?php if (login_check($mysqli) == true) : ?>
      <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
    <main-screen
      menuTitle="ConCon">
    </main-screen>
  <?php else : ?>
    <?php header('Location: ../login.php?'); ?>
  <?php endif; ?>
  </body>


</html>
