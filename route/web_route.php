<?php 
	// This route is specifically for building Web Applications

	use App\Controller\Page\{IndexController,QuestionTwoPageController};
	use App\Controller\Action\{PageOneQuestionController,PageTwoQuestionController};


	//question one route
	$app->get("",[IndexController::class,"loadIndexPage"]);
	$app->get("/page-one-theory",[IndexController::class,"loadPageOneTheory"]);
	$app->post("/question/page-one",[PageOneQuestionController::class,"pageOneAction"]);




	//question two route
	$app->get("/question-two",[QuestionTwoPageController::class,"loadPage"]);
	$app->get("/page-two-theory",[QuestionTwoPageController::class,"loadPageTwoTheory"]);
	$app->post("/question/page-two",[PageTwoQuestionController::class,"pageTwoAction"]);