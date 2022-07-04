@extends('layouts.main')
@section('content')

  <table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">Name</th>
      

      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($users as $user)
          <tr>
        <th scope="row">{{ $user->name }}</th>
        <td>
          
          @foreach ($customers as $customer)
              @if ($user->id == $customer->user_id)
                  <a href="#"
                  
                  @if ($customer->abbr == 'PLA')
                      class="btn btn-outline-secondary">
                  @endif
                  @if ($customer->abbr == 'MDM')
                      class="btn btn-outline-primary">
                  @endif
                  @if ($customer->abbr == 'MAT')
                      class="btn btn-outline-success">
                  @endif
                  @if ($customer->abbr == 'ARV')
                      class="btn btn-outline-danger">
                  @endif
                  @if ($customer->abbr == 'KAT')
                      class="btn btn-outline-warning">
                  @endif
                  @if ($customer->abbr == 'SONS')
                      class="btn btn-outline-info">
                  @endif
                  @if ($customer->abbr == 'WAM')
                      class="btn btn-outline-dark">
                  @endif
                  
                    
                  {{ $customer->abbr }} {{ $customer->stunden }}</a>
              @endif
              
          @endforeach
          
          <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1{{ $user->id }}">
            <i class="fa-solid fa-plus"></i>
          </a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal1{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="POST" action="/page">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kunde und Anzahl der Stunden hinzufügen:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
                      @csrf
                      <input  type="hidden" name="user_id" value="{{ $user->id }}">           
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="abbr">
                      <option selected>Kunde</option>
                      @foreach ($kunden as $kunde)
                          <option value="{{ $kunde->abbr }}">{{ $kunde->name }}</option>
                      @endforeach
                    </select>
                    <hr>
                      <div class="mb-3">
                      <label for="stunden" class="form-label">Stunden</label>
                      <input type="text" name="stunden" class="form-control" id="stunden" aria-describedby="Stunden">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </form>
            </div>

          {{-- <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <i class="fa-solid fa-plus"></i>
          </a>
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Woche 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <i class="fa-solid fa-plus"></i>
          </a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Woche 3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
         <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
            <i class="fa-solid fa-plus"></i>
          </a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Woche 4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div> --}}
        </td>
        <td>
          <a href="#" class="btn btn-outline-secondary">
            

          </a>
        </td>
        <td>
          {{-- <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal9">
            <i class="fa-solid fa-plus"></i>
          </a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Woche 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

          <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal10">
            <i class="fa-solid fa-plus"></i>
          </a>
          <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Woche 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal11">
            <i class="fa-solid fa-plus"></i>
          </a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Woche 3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
         <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal12">
            <i class="fa-solid fa-plus"></i>
          </a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Woche 4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div> --}}
        </td>
      </tr>
      @endforeach

      <!-- Neuer Mitarbeiter -->
      <th scope="row">Neuer Mitarbeiter <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addMitarbeiter">
            <i class="fa-solid fa-plus"></i>
          </a>
          <!-- Modal -->
          <div class="modal fade" id="addMitarbeiter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Neuer Mitarbeiter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="/home">
                @csrf
                <div class="form-group py-2">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control " name="name" value=""  autofocus placeholder="Name">
                </div>
                
                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                        <button type="submit" class="btn btn-space btn-primary mt-3">Submit</button>
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                        </p>
                    </div>
                </div>
                </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
        </th>
    </tbody>
</table>

    {{-- <ul>
      <li>Anna Schilling</li>
      <li>Andreas Koch</li>
      <li>Andreas Schäfer</li>
      <li>Andreas Jeske</li>
      <li>Anja Görgner</li>
      <li>Dimi Alamanos</li>
      <li>Erik Ratschlag</li>
      <li>Joshua Bush</li>
      <li>Maxim Gofman</li>
      <li>Nils Müller</li>
      <li>René Penner</li>
      <li>Richard Rohrig</li>
      <li>Rudolf Block</li>
      <li>Thorsten Friesen</li>
      <li>Tina Lütjen</li>
      <li>Tobias Jeske</li>
      <li>Panagiotis Kogakis</li>
      <li>Tyler Fiekens</li>
      <li>Valentin Becker</li>
    </ul> --}}
    
@endsection
