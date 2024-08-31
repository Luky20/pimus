@extends('layout.admin')

@section('style')
    
@endsection

@section('content')
    @if (isset($_GET['messageType'], $_GET['message']))
        @if ($_GET['messageType'] == "success")
            <div class="alert alert-success" role="alert">
                {{ $_GET['message'] }}
            </div>
        @else
            <div class="alert alert-danger" role="alert">
                {{ $_GET['message'] }}
            </div>
        @endif
    @endif

    <div style="position: relative">
        <h3>Add Poster</h3>
    
        @if (in_array(Auth::user()->role, ["Admin", "Sekre", "Acara"]))            
            <button type="button" class="btn btn-success position-absolute top-0 end-0" style="font-weight: bolder" data-bs-toggle="modal" data-bs-target="#AddPoster">
                +
            </button>
        @endif
    </div>

    <div class="modal fade" id="AddPoster" tabindex="-1" aria-labelledby="AddPosterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ShowLabel">Add New Poster :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">                    
                    <form action="{{ route('admin.addPoster') }}" method="POST" id="formAddPoster" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="addTeam" class="form-label">Ketua Tim :</label>
                            <select name="selectedTeam" id="selectedTeam" class="form-select">
                                @foreach($teams as $team)
                                <option value="{{$team->teams_id}}">{{$team->ketua}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="addDescription" class="form-label">Judul :</label>
                            <input type="text" name="addJudul" id="addJudul"class="form-control"></input>
                            <label for="addPoster" class="form-label">File Poster :</label>
                            <input type="file" name="addPoster" class="addPoster" accept=".png, .jpg" required><br>
                        </div>

                        <div class="mb-3">
                          
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="formAddPoster">Add</button>
                </div>
            </div>
        </div>
    </div>
@endsection