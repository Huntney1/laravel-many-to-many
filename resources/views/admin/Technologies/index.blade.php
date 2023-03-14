{{-- * Technologies\Index.blade.php --}}
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Lista Tecnologie</h2>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Azione</th>
                    </tr>
                    @forelse ($technologiess as $tecnology)
                        <tr>
                            <td>{{ $tecnology->id }}</td>
                            <td>{{ $tecnology->name }}</td>
                            <td>{{ $tecnology->slug }}</td>
                            <td>
                                {{-- * questa rotta visualizza il dettaglio del progetto --}}
                                {{-- <a href="{{ route('admin.projects.show', $project->slug) }}"
                                    class="btn btn-lg btn-primary btn-square" title="Visualizza Dettaglio"><i
                                        class="fas fa-eye"></i></a> --}}

                                {{-- * questa rotta modifica il progetto --}}
                                {{-- <a class="btn btn-lg btn-warning btn-square"
                                    href="{{ route('admin.projects.edit', $project->slug) }}" title="Modifica Dettaglio"><i
                                        class="fas fa-edit"></i></a> --}}

                                {{-- * questa rotta elimina il progetto --}}
                                {{-- <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-lg btn-square btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal-project" data-projectid="{{ $project->id }}"
                                        type="submit" title="Elimina"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td scope="row">
                                Non ci Sono Projetto, Aggiungine uno da <a href="{{ route('admin.projects.create') }}">=>QUI
                                    <=< /a>
                            </td>
                        </tr>--}}
                    @endforelse
                </table>
            </div>
        </div>
    </div>
    @include('admin.partials.modals')
@endsection
