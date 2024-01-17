<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

/** anon */
function index() {
   View::showView("app/index");
}

/** user, admin */
function about() {
   View::showView("app/about");
}
