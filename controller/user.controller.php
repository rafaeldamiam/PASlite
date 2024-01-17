<?php

require_once "model/user.model.php";

/** user, admin */
function index(){
	$data["users"] = UserModel::takeAllUsers();
	showView("user/list");
}

/** user, admin */
function add(){
	if(Services::methodPost()){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		Alert::showAlert($name, $email, $password);
		View::redirectView("user");
	}else{
		View::showView("user/form");
	}

}

/** user, admin */
function delete($id){
	Alert::showAlert(deleteUser($id));
	View::redirectView("user/index");
}

/** user, admin */
function edit($id)
{
	if(Services::methodPost()){
		$name = $_POST["name"];
		$email = $_POST["email"];
		Alert::showAlert(editUser($id, $name, $email));
		View::redirectView("user/formulario");
	}else{
		$data["user"] = takeUsersById($id);
		View::showView("user/form", $data);
	}
}

/** user, admin */
function showUser(){
	$data["user"] = takeUserById($id);
	View::showView("user/show", $data);
}