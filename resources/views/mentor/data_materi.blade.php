@extends('layouts/home_mentor')

@section('title', 'Lunchat')

@section('content')
<div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Data Materi</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">Nama</th>
                                                <th scope="col">Pertemuan</th>
                                                <th scope="col">tanggal</th>
                                                <th scope="col">Mulai</th>
                                                <th scope="col">Selesai</th>
                                                <th scope="col">URL</th>
                                                <th scope="col">Topik</th>
                                                <th scope="col">Kuota</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                        @foreach( $material as $m)
                                                <tr class="text-left">
                                                    <td scope="row">
                                                      {{ $m->name }}</td>
                                                    <td>
                                                      {{ $m->pertemuan }}
                                                    </td>
                                                    <td>
                                                      {{ $m->tanggal }}
                                                    </td>
                                                    <td>
                                                      {{ $m->jam_mulai }}
                                                    </td>
                                                    <td>
                                                      {{ $m->jam_selesai }}
                                                    </td>
                                                    <td>
                                                      {{ $m->url }}
                                                    </td>
                                                    <td>
                                                      {{ $m->topik }}
                                                    </td>
                                                    <td>
                                                      {{ $m->kuota }}
                                                    </td>
                </tr>
                  </tr>
                  @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection