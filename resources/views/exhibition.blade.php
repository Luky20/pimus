@extends('layout.mainweb')

@section('title')
PIMUS 13 - Exhibition
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<section id="exhibition" style="margin-top: 150px;">
    <div class="container">

        <div class="row mb-4">
            <div class="col-12 exhibition-title">
                <h1 class="title">Exhibition</h1>
                <p style="color: #ebb010">*)Tekan gambar untuk melihat lebih detil dan tombol vote</p>
            </div>
        </div>

        <div class="row">
            @if ($posters->count() != 0)
            
                @foreach ($posters as $index => $poster)
                    @if ($poster->path != null)
                        @php
                        $matches=array();
                        preg_match('/(?<=file\/d\/)(.*)(?=\/)/', $poster->path, $matches);
                        $img=$poster->path;
                        // $img='https://ubayapimus.com/'.$poster->path;
                        @endphp
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="wrapper">
                            <div class="card-exhibition" data-bs-toggle="modal" data-bs-target="#posterCard{{ $poster->posters_id }}">
                                <img src="{{ url($img) }}" alt="">
                                <div class="info">
                                    <h1>{{$poster->judul}}</h1>
                                    <p>
                                        <i>
                                           {{$poster->name}}
                                        </i>
                                    </p>
                                    <p>
                                        Votes: {{$likes[$index]}}
                                    </p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="posterCard{{$poster->posters_id}}" tabindex="-1" " role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                
                                <div class="modal-body">
                                    <img src="{{ url($img) }}" alt="">
                                    <h5 class="mt-2">{{$poster->judul}}</h5>
                                    <p>
                                        <i>
                                           {{$poster->name}}
                                        </i>
                                    </p>
                                     <p>Votes: {{$likes[$index]}}</p>
                                </div>
                                
                                <div class="modal-footer">
                                    @if (!Auth::guest())
                                        <p class="text-danger">Vote left: {{ Auth::user()->vote_tickets }}</p>
                                    @endif

                                    @if (time() <= strtotime("2024-12-1 12:00:00") && time() >= strtotime("2023-11-26 23:59:00"))
                                        @if(Auth::user())
                                            <button class="btn btn-success w-100" id="button{{$poster->posters_id}}"><i class="bi bi-hand-thumbs-up-fill px-2"></i>Vote</button>
                                        @else
                                            <h4 style="color: red">Silahkan Login Terlebih Dahulu</h4>
                                        @endif
                                        @else
                                        <br>
                                        <h4 style="color: red">*) Masa Vote adalah 27 November - 1 Desember</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                    
                    </script>
                    
                    @endif

                    @endforeach
                @else
                    <div class="alert alert-light" role="alert">
                        There's no data
                    </div>
            @endif
        </div>
</section>
{{--  Toaster Sweet Alert  --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toaster = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    })
     $('.btn').on('click', function() {
        if (!confirm("Are you sure?")) return
        var idPoster = this.id;
        idPoster = idPoster.slice(6);
        // console.log(idPoster);
        
        $.ajax({
            url: "{{ route('exhibition.vote', ['id' => ':id']) }}".replace(':id', idPoster),
            type: "POST",
            data: { 'idPoster': idPoster, '_token': '{{ csrf_token() }}' }, 
            success: function (data) {
                var iconStatus = 'error'
                if(data[0].status == 1){
                    iconStatus = 'success'
                    
                }
                Swal.fire({
                    icon: iconStatus,
                    animation: true,
                    title: data[0].msg,
                    duration: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
                
                if(data[0].status == 1){
                    setTimeout(() => {
                        location.reload()
                    }, 3001);
                }
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>
@endsection