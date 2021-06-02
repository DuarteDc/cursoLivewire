<div class="grid grid-cols-4 gap-4 mt-8">
    @foreach ($courses as $course)
        <x-course-card :course="$course"/>
    @endforeach
</div>
