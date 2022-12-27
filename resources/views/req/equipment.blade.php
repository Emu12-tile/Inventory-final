<div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('admin.experiment.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Add Experiment</h5>
                    <p class="mb-25">Create experiment forms by adding experiment </p>

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.experiment.store') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Experiment Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror " id="name"
                                            placeholder="experiment Name">
                                        @error('name')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="laboratory_id" class="col-sm-2 col-form-label">Laboratory</label>
                                    <div class="col-sm-10">
                                        <select class="form-control custom-select  mt-15" name="laboratory_id">
                                            @foreach ($laboratory as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ old('laboratory_id') == $col->id ? 'selected' : '' }}>
                                                    {{ $col->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="course_id" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                        <select class="form-control custom-select  mt-15" name="course_id">
                                            @foreach ($course as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ old('course_id') == $col->id ? 'selected' : '' }}>{{ $col->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="objective" class="col-sm-2 col-form-label">Objective</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="objective" class="form-control mt-15 @error('objective') is-invalid @enderror"
                                            id="objective" placeholder="objective "></textarea>
                                        @error('objective')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">CREATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>