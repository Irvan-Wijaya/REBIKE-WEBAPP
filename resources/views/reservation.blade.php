@extends('layouts.main')

@section('content')
    <div class="col-7 mx-auto">
        <h1 class="custom-display-text display-4 mb-3">Reservation</h1>
        <p class="mb-5">A mechanic will come to your house to repair your bicycle. Our mechanic will bring their own
            equipment and will fix your bicycle within minimum of 1 hour.</p>

        {{-- Consult --}}
        <div class="mb-5">
            <h2 class="d-flex align-items-center fw-bold custom-display-text"><i class="bi bi-1-circle me-3"></i>Consult</h2>
            <p>Don't know what's the problem with your bike? Ask us first! We will give you our best recommendation and will
                prepare better for your service</p>
            <button type="button" class="btn btn-success p-3 text-white"><i class="bi bi-whatsapp me-2"></i>Whatsapp +62
                812-0000-0000</button>
        </div>

        {{-- Bicycle Type --}}
        <div class="mb-5">
            <h2 class="d-flex align-items-center fw-bold custom-display-text"><i class="bi bi-2-circle me-3"></i>Bicycle
                Type</h2>
            <p>To determine the tools needed to repair your bike, please select a type of bike that you wish to repair</p>
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Select your bicycle type</option>
                    <option value="9:30">9:30</option>
                    <option value="Mountain Bike">10:30</option>
                    <option value="Sports Bike">Sports Bike</option>
                    <option value="Folding Bike">Folding Bike</option>
                    <option value="Utlity Bike">Utlity Bike</option>
                    <option value="Tandem Bike">Tandem Bike</option>

                </select>
                <label for="floatingSelect">Bicycle Type</label>
            </div>
        </div>
        {{-- Bicycle Problems --}}
        <div class="mb-5">
            <h2 class="d-flex align-items-center fw-bold custom-display-text">
                <i class="bi bi-3-circle me-3"></i>Bicycle Problems
            </h2>
            <p>Please checklist the problem(s) you have with your bike. You can also add extra notes to our mechanic</p>
            <div class="form-floating">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="tire-problem">
                    <label class="form-check-label" for="tire-problem">
                        Tire Problem (Blowouts, Warped, Broken)
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="rim-problem">
                    <label class="form-check-label" for="rim-problem">
                        Rim Problem (Cracked, Warped, Broken)
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="frame-problem">
                    <label class="form-check-label" for="frame-problem">
                        Frame Problem (Loose, Unstable, Cracked)
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="chain-problem">
                    <label class="form-check-label" for="chain-problem">
                        Chain Problem (Detached, Creaking, Loose)
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="suspension-problem">
                    <label class="form-check-label" for="suspension-problem">
                        Suspension Problem (Stuck, Heated, Broken)
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="brake-problem">
                    <label class="form-check-label" for="brake-problem">
                        Brake Problem (Squishy, Ineffective, Squeaky)
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="needs-installation">
                    <label class="form-check-label" for="needs-installation">
                        Needs an installation
                    </label>
                </div>
                <div class="form-floating mb-2">
                    <textarea class="form-control" placeholder="Describe more about your problem" id="describe" style="height: 100px"></textarea>
                    <label for="describe" class="text-muted">Describe more about your problem</label>
                </div>
            </div>
        </div>

        {{-- Address --}}
        <div class="mb-5">
            <h2 class="d-flex align-items-center fw-bold custom-display-text">
                <i class="bi bi-4-circle me-3"></i>Address
            </h2>
            <p>List the detail of your location. Please write a clear address detail so that our mechanic can get there as
                soon as possible!</p>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">City</label>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Province</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">ZIP Code</label>
                    </div>
                </div>
            </div>
        </div>

        {{-- Schedule --}}
        <div class="mb-5">
            <h2 class="d-flex align-items-center fw-bold custom-display-text">
                <i class="bi bi-5-circle me-3"></i>Schedule
            </h2>
            <p>Pick a suitable schedule for the reparation. Our mechanic will arrive on time.</p>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Date</label>
            </div>
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Select your schedule time</option>
                    <option value="830">8:30</option>
                    <option value="1030">10:30</option>
                    <option value="1230">12:30</option>
                    <option value="1430">14:30</option>
                    <option value="1630">16:30</option>
                </select>
                <label for="floatingSelect">Time</label>
            </div>
        </div>

        <div class="d-grid">
            <button type="button" class="btn btn-primary text-white p-3">
                <h5 class="m-0"><i class="bi bi-calendar-check me-3"></i>Reserve</h5>
            </button>
        </div>
    </div>
@endsection
