<?php

namespace App\Http\Controllers;

use App\Domain\Errors\ErrorRepository;
use App\Domain\Leads\LeadRepository;
use App\Http\Requests\ContactMessageRequest;
use App\Domain\Messages\MessageRepository;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function contact(
        ContactMessageRequest $request,
        MessageRepository $messageRepo,
        LeadRepository $leadRepo
    )
    {
        try {
            DB::beginTransaction();
            $messageRepo->store($request->all());
            $leadRepo->store($request->all());
            DB::commit();
            return response(['message' => 'Message sent successfully.'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            (new ErrorRepository())->store($e);
            return response(['message' => 'Error occurred'], 500);
        }
    }
}
