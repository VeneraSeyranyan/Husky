<button {{ $attributes->merge(['type' => 'submit','class' => 'items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

