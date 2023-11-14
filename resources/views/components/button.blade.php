<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <button {{$attributes->merge(['data-controller' => $attributes->prepends('profile-controller'), 'class' =>'bg-indigo-100 p-2 rounded-md'])}}>
        {{$slot}}
    </button>
</div>