<div class="task-area">


    {{-- alert --}}
    @if(session()->has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
    @endif

    <h1>{{ $pageName }}</h1>
        <div class="group-task">
            <h4>Belum Selesai</h4>
            @foreach ($tasks as $task)
            @if ($task->ID_STATUS == 3 && $task->DEADLINE > $now)
                <div>
                    <div class="head-task">
                        <h5 class="name-task" contenteditable="true">{{ $task->NAMA_TASK }}</h5>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="content-task">
                        <li>
                            <p class="sub-detail">Detail</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem ipsum dolor sit amet.</p>
                        </li>
                        <li>
                            <p class="sub-detail">Kategori</p>
                            <p class="isi-sub-task" contenteditable="true">{{ $task->ID_KATEGORI }}</p>
                        </li>
                        <li>
                            <p class="sub-detail">Deadline</p>
                            <p class="isi-sub-task" contenteditable="true">{{ $task->DEADLINE }}</p>
                        </li>
                        <li>
                            <p class="sub-detail">Dikumpulkan ke</p>
                            <p class="isi-sub-task" contenteditable="true">{{ $task->TEMPAT_PENGUMPULAN }}</p>
                        </li>
                        <li class="button-action">
                            <form action="/update-status" method="post">
                             @csrf
                                <input type="hidden" name="ID_TASK" value="{{ $task->ID_TASK }}">
                                <input type="hidden" name="update-status" value="1" id="">
                                <button class="btn" type="submit" >Kerjakan</button>
                                <a href="/add-to-my-day/{{ $task->ID_TASK }}" class="btn" type="submit" >+ My Day</a>
                            </form>

                            <div class="button-crud">
                                <form action="/update-task" method="post">
                                    @csrf
                                    <input type="hidden" name="_methode" value="PUT">
                                    {{-- <input type="text" name="NAMA_TASK" value="{{ $task-> }}"> --}}
                                </form>
                                <button class="btn">Edit</button>
                                <!-- Button trigger modal -->
                                    {{-- <button type="button" class="btn btn-primary" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modal-confirm" 
                                    data-id_task = {{ $task->ID_TASK }}
                                    data-nama_task = {{ $task->NAMA_TASK }}
                                    id='delete'
                                    style="background-color: #05595b">
                                    Delete
                                    </button> --}}
                                <a href="delete-task/{{ $task->ID_TASK }}" class="btn"  style="background-color: #05595b">Delete</a>
                            </div>
                        </li>
                    </div>
                </div>
            @endif
            @endforeach
        </div>
    

        <div class="group-task">
            <h4>Sedang Dikerjakan</h4>
            @foreach ($tasks as $task)
            @if ( $task->ID_STATUS == 1 && $task->DEADLINE > $now)
                <div>
                    <div class="head-task">
                        <h5 class="name-task" contenteditable="true">{{ $task->NAMA_TASK }}</h5>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="content-task">
                        <li>
                            <p class="sub-detail">Detail</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem ipsum dolor sit amet.</p>
                        </li>
                        <li>
                            <p class="sub-detail">Kategori</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem.</p>
                        </li>
                        <li>
                            <p class="sub-detail">Deadline</p>
                            <p class="isi-sub-task" contenteditable="true">{{ $task->DEADLINE }}</p>
                        </li>
                        <li>
                            <p class="sub-detail">Dikumpulkan ke</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem, ipsum dolor.</p>
                        </li>
                        <li class="button-action">
                            <form action="/update-status" method="post">
                                @csrf
                                   <input type="hidden" name="ID_TASK" value="{{ $task->ID_TASK }}">
                                   <input type="hidden" name="update-status" value="2" id="">
                                   <input class="btn" type="submit" value="Selesai">
                               </form>
                            <div class="button-crud">
                                <button class="btn">Edit</button>
                                <button class="btn">Hapus</button>
                            </div>
                        </li>
                    </div>
                </div>
            @endif
            @endforeach
        </div>

        <div class="group-task">
            <h4>Selesai</h4>
            @foreach ($tasks as $task)
            @if ( $task->ID_STATUS == 2)
                <div>
                    <div class="head-task">
                        <h5 class="name-task" contenteditable="true">{{ $task->NAMA_TASK }}</h5>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="content-task">
                        <li>
                            <p class="sub-detail">Detail</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem ipsum dolor sit amet.</p>
                        </li>
                        <li>
                            <p class="sub-detail">Kategori</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem.</p>
                        </li>
                        <li>
                            <p class="sub-detail">Deadline</p>
                            <p class="isi-sub-task" contenteditable="true">{{ $task->DETAIL }}</p>
                        </li>
                        <li>
                            <p class="sub-detail">Dikumpulkan ke</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem, ipsum dolor.</p>
                        </li>
                        <li class="button-action">
                            <div class="button-crud">
                                <button class="btn">Edit</button>
                                <button class="btn">Hapus</button>
                            </div>
                        </li>
                    </div>
                </div>
            @endif
            @endforeach
        </div>

        <div class="group-task">
            <h4>Terlewat</h4>
            @foreach ($tasks as $task)
            @if ( ($task->DEADLINE < $now) && ($task->ID_STATUS == 1 || $task->ID_STATUS == 3))
                <div>
                    <div class="head-task">
                        <h5 class="name-task" contenteditable="true">{{ $task->NAMA_TASK }}</h5>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="content-task">
                        <li>
                            <p class="sub-detail">Detail</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem ipsum dolor sit amet.</p>
                        </li>
                        <li>
                            <p class="sub-detail">Kategori</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem.</p>
                        </li>
                        <li>
                            <p class="sub-detail">Deadline</p>
                            <p class="isi-sub-task" contenteditable="true">{{ $task->DEADLINE }}</p>
                        </li>
                        <li>
                            <p class="sub-detail">Dikumpulkan ke</p>
                            <p class="isi-sub-task" contenteditable="true">Lorem, ipsum dolor.</p>
                        </li>
                        <li class="button-action">
                            <form action="/update-status" method="post">
                                @csrf
                                   <input type="hidden" name="ID_TASK" value="{{ $task->ID_TASK }}">
                                   <input type="hidden" name="DEADLINE" value="{{ $task->DEADLINE }}">
                                   <input type="hidden" name="update-status" value="1" id="">
                                   <input class="btn" type="submit" value="kerjakan">
                               </form>
                            <div class="button-crud">
                                <button class="btn">Hapus</button>
                            </div>
                        </li>
                    </div>
                </div>
            @endif
            @endforeach
        </div>
</div>