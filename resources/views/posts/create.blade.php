@extends('layouts.app')

@section('content')

    <div class="card card-default">
        <div class="card-header">
            {{ isset($post) ? 'Edit Post' : 'Create Post' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($post) ? route('posts.update',$post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ isset($post) ? $post->title : '' }}">
                </div>
                <div class="form-group">
                    <label for="description">About Me</label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control"> {{ isset($post) ? $post->description : '' }}</textarea>
                </div>
                <div class="form-group row">
                    <label for="dob" class="col-2 col-form-label">Date Of Birth</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="{{ isset($post) ? $post->dob : ''}}" id="dob" name="dob">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="5" rows="5" class="form-control"> {{ isset($post) ? $post->address : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email Id:</label>
                    <input class="form-control" type="email" value="{{ isset($post) ? $post->email : ''}}" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phonenum">Phone Number:</label>
                    <input class="form-control" type="number" value="{{ isset($post) ? $post->phonenum : ''}}" id="phonenum" name="phonenum">
                </div>
                <div class="form-group">
                    <label for="noofprojects">Number Of Projects</label>
                    <input class="form-control" type="number" value="{{ isset($post) ? $post->noofprojects : ''}}" id="noofprojects" name="noofprojects">
                </div>
                <div class="form-group">
                    <label for="content">content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"> {{ isset($post) ? $post->content : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="published_at">published_at</label>
                    <input type="text" class="form-control" name="published_at" id="published_at" value="{{ isset($post) ? $post->published_at : '' }}">
                </div>
                @if(isset($post))
                    <div class="form-group">
                        <img src="{{ asset($post->image) }}" style="width: 100%">
                    </div>
                @endif
                <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                    @if(isset($post))
                                    @if($category->id == $post->$categories)
                                    selected
                                @endif
                                @endif
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <h1>Education</h1>
                <div class="form-group">
                    <label for="classten">10th class</label>
                    <input type="text" class="form-control" name="classten" id="classten" value="{{ isset($post) ? $post->classten : '' }}">
                </div>
                <div class="form-group">
                    <label for="classtw">12th class</label>
                    <input type="text" class="form-control" name="classtw" id="classtw" value="{{ isset($post) ? $post->classtw : '' }}">
                </div>
                <div class="form-group">
                    <label for="university">Graduation</label>
                    <input type="text" class="form-control" name="university" id="university" value="{{ isset($post) ? $post->university : '' }}">
                </div>
                <h1>Projects</h1>
                <div class="form-group">
                    <label for="projectone">Project 1:</label>
                    <input type="text" placeholder="Name of Project" class="form-control" name="projectonename" id="projectonename" value="{{ isset($post) ? $post->projectonename : '' }}">
                    <textarea name="projectone"  placeholder="About of Project" id="projectone" cols="5" rows="5" class="form-control"> {{ isset($post) ? $post->projectone : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="projecttwo">Project 2:</label>
                    <input type="text" placeholder="Name of Project" class="form-control" name="projecttwoname" id="projecttwoname" value="{{ isset($post) ? $post->projecttwoname : '' }}">
                    <textarea name="projecttwo" placeholder="About of Project" id="projecttwo" cols="5" rows="5" class="form-control"> {{ isset($post) ? $post->projecttwo : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="projectthree">Project 3:</label>
                    <input type="text" placeholder="Name of Project" class="form-control" name="projectthreename" id="projectthreename" value="{{ isset($post) ? $post->projectthreename : '' }}">
                    <textarea name="projectthree" placeholder="About of Project" id="projectthree" cols="5" rows="5" class="form-control"> {{ isset($post) ? $post->projectthree : '' }}</textarea>
                </div>
                <h1>Experience</h1>
                <div class="form-group">
                    <label for="experienceone">Experience 1:</label>
                    <input type="text" placeholder="Post - Name Of Organization" class="form-control" name="experienceone" id="experienceone" value="{{ isset($post) ? $post->experienceone : '' }}">
                </div>
                <div class="form-group">
                    <label for="experiencetwo">Experience 2:</label>
                    <input type="text" placeholder="Post - Name Of Organization" class="form-control" name="experiencetwo" id="experiencetwo" value="{{ isset($post) ? $post->experiencetwo : '' }}">
                </div>
                <div class="form-group">
                    <label for="experiencethree">Experience 3:</label>
                    <input type="text" placeholder="Post - Name Of Organization" class="form-control" name="experiencethree" id="experiencethree" value="{{ isset($post) ? $post->experiencethree : '' }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Create Post
                    </button>
                </div>


            </form>
        </div>
    </div>

@endsection
