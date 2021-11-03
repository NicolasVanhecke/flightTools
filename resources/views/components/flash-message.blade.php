@if ($message = Session::get('success'))
<div class="alert w-screen absolute text-center py-4 lg:px-4">
    <div class="p-2 bg-green-500 items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-green-700 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
        <svg class="btn-hide-alert fill-current h-4 w-4" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert w-screen absolute text-center py-4 lg:px-4">
    <div class="p-2 bg-red-500 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-red-800 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
        <svg class="btn-hide-alert fill-current h-4 w-4" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert w-screen absolute text-center py-4 lg:px-4">
    <div class="p-2 bg-yellow-400 items-center text-yellow-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-yellow-500 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
        <svg class="btn-hide-alert fill-current h-4 w-4" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert w-screen absolute text-center py-4 lg:px-4">
    <div class="p-2 bg-blue-500 items-center text-blue-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-blue-800 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
        <svg class="btn-hide-alert fill-current h-4 w-4" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </div>
</div>
@endif

@if ($errors->any())
<div class="alert w-screen absolute text-center py-4 lg:px-4">
    <div class="p-2 bg-blue-500 items-center text-blue-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-blue-800 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
        <svg class="btn-hide-alert fill-current h-4 w-4" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </div>
</div>
@endif
