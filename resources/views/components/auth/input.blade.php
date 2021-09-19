@props(["disabled" => false])

<input {{ $disabled ? "disabled" : "" }} {!! $attributes->merge(["class" => "rounded-md shadow-sm border-gray-300 px-4 py-2 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"]) !!}>
