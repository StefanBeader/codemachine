<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new User';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param User $user
     * @return mixed
     */
    public function handle(User $user)
    {
        $user->name = $this->ask('Enter your name');
        $user->email = $this->ask('Enter your e-mail address');
        $user->password = bcrypt($this->secret('Enter password'));

        $user->save();

        return $user->toArray();
    }
}
