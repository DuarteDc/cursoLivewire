<div>
    <div class="bg-white shadow-lg px-4 py-6 text-center">
        <a href="{{route('course', $course->slug)}}">
            <img src="{{$course->image}}" class="rounded-md mb-2">
            <h2 class="text-lg text-gray-600 truncate uppercase">{{$course->name}}</h2>
            <h3 class="text-md text-gray-500">{{$course->excerpt}}</h3>

            <img src="{{$course->user->avatar}}" class="rounded-full  mx-auto w-16 mt-3">
        </a>
    </div>
</div>