<?php
class PagesController extends BaseController {

    
    public function pages()
    {

        return View::make('about');
    }

}