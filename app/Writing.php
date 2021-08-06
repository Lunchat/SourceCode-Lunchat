<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Writing extends Authenticatable
    {
        use Notifiable;

        protected $fillable = [
            'name', 'url', 'file', 'tanggal', 'kuota', 'jam_mulai', 'jam_selesai', 'topik',
        ];

        public function check_join_kelas($id, $student_id)
    {
        return $this->db->where('writing_id', $id)->where('student_id', $student_id)->from('writing_join')->count_all_results();
    }
}

