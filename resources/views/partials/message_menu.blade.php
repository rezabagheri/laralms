<?php
use App\Models\User_message;


$user_messages = User_message::all();

//dd($user_messages[0]->Messages[0]->subject);
//$message = ;
//$message = $messages[1];
//echo 'subjecy: '.($messages[0]->subject);
    //$message = $messages[0]->getMessage();
    //dd($message);

//dd(count($messages));
?>
<!-- Nav Item - Messages -->
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
        <span class="badge badge-danger badge-counter"><?= count($user_messages)?></span>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
            Message Center
        </h6>

        @foreach ($user_messages as $message)
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="img/undraw_profile_1.svg"
                    alt="">
                <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
                <div class="text-truncate"><?= $message->Messages[0]->subject ?></div>
                <div class="small text-gray-500"><?= $message->Messages[0]->send_date ?></div>
            </div>
        </a>
        @endforeach

        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
    </div>
</li>
