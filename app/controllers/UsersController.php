<?php
class UsersController extends BaseController {
	//protected $layout = "layouts.default";
    
    public function getRegister()
    {

        return View::make('pages.contact');
    }

}