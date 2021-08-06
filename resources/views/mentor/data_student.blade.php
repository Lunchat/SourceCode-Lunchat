@extends('layouts/home_mentor')

@section('title', 'Lunchat')

@section('content')
<!-- Start Class Card -->
             <div class="main-content">
                <section class="section">
                    <div class="card">
                        <center></center><div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Data Student</h2>
                        </div></center>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Motivasi Bergabung</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          @foreach( $student as $std)
                                                <tr class="text-left">
                                                    <th scope="row">
                                                      {{ $loop->iteration }}</th>
                                                    <td>
                                                      {{ $std->name }}
                                                    </td>
                                                    <td>
                                                      {{ $std->email }}
                                                    </td>
                                                    <td>
                                                      {{ $std->motivasi }}
                                                    </td>
                                                    <td>
                        <a href="/mentor/detail_student/{{ $std->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                  </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                    <p class="small font-weight-bold">* Angka 1 menunjukan akun telah aktif sedangkan
                                        Angka
                                        0 menunjukan akun
                                        belum
                                        aktif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @endsection