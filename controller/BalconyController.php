<?php

namespace Vvoro\Balcon\controller;


use action\BalconyAction;

class BalconyController extends AppController
{
    public function __construct(
        private BalconyAction $actions,
    )
    {
        parent::__construct();

    }
    public function actionAjax(): void
    {
        $this->actions->sendTg();
    }
	public function actionIndex(): void
    {
        view('admin.balcony.pages.main',compact('data', 'conf'));
	}
    public function actionWindows(): void
    {
        view('admin.balcony.pages.windows',compact('data', 'conf'));
    }
    public function actionlodgii(): void
    {
        view('admin.balcony.pages.lodgii',compact('data', 'conf'));
    }
}
