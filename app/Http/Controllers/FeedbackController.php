<?php

namespace App\Http\Controllers;

use App\Containers\Feedback\Services\FeedbackService;
use App\Containers\Feedback\Traits\ApiResponser;
use App\Http\Requests\feedbackRequest;

class FeedbackController extends Controller
{
    use ApiResponser;

    public function feedback(feedbackRequest $request)
    {
        try {
            app(FeedbackService::class)->run($request->getDto());

            return $this->success('', 'Спасибо за коммент', 200);

        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 401);
        }
    }
}
