<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Mentor extends Authenticatable implements MustVerifyEmail
    {
        use Notifiable;

        protected $guard = 'mentor';

        protected $fillable = [
            'name', 'email', 'password', 'profil', 'umur', 'no_hp', 'status', 'hobby', 'motivasi',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getProfil()
    {
        if(!$this->profil){
            return asset('img/default.png');
        }
        return asset('img/profil/'.$this->profil);
    }
}
