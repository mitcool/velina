@extends('admin.template')

@section('content')
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
       Галерия
    </h2>
    <hr>

    <div class="mx-auto w-full">
        <form class="bg-white p-6 rounded-2xl shadow-md w-full max-w-md space-y-4 mx-auto" action="{{ route('add-picture') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
            <h2 class="text-2xl font-semibold text-gray-800">Качи нова картина</h2>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Име на картината (Български)</label>
      <input
        name="name"
        type="text" 
        required
        placeholder=""
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Име на картината (Английски)</label>
      <input
        name="name_en"
        type="text" 
        required
        placeholder=""
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>
   
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Кратко описание (Български) (опционално)</label>
      <input 
        name="description_en"
        type="text" 
        placeholder=""
        
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Кратко описание (Английски) (опционално)</label>
      <input 
        name="description"
        type="text" 
        placeholder=""
        
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Категория</label>
      <select
        name="category_id"
        required
        id="category_id"
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
        <option value="" selected disabled>Избери категория</option>
        @foreach ($categories as $category )
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        
      </select>
    </div>

    <div id="period">

    </div>

    {{-- <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Период</label>
      <select 
        required
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
        <option value="">1</option>
      </select>
    </div> --}}

    <!-- File Input -->
    <div style="margin:0 auto;">
      <label class="block text-sm font-medium text-gray-700 mb-1">Избери файл</label>
      <input
        name="file"
        required
        type="file"
        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 
               file:rounded-lg file:border-0 
               file:text-sm file:font-semibold 
               file:bg-blue-50 file:text-blue-700 
               hover:file:bg-blue-100"
      >
    </div>
    <input type="checkbox" name="is_selected" > Избрани Картини
    <!-- Submit -->
    <button 
      type="submit"
      class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition"
    >
      Качи снимката
    </button>
  </form>
  </div>
  <hr>
  <h1 style="text-align: center;font-size:2rem;margin-top:40px;">Картини в галерията:</h1>
  <div class="grid grid-cols-6 gap-3">
     @foreach($artworks as $artwork)
     <div class="p-4  text-center shadow-lg" style="height:auto">
        <img src="{{ asset('images/artwork') }}/{{ $artwork->image }}" alt="" style="width:100%">
        
        <a style="display: block" class="bg-amber-500 hover:bg-amber-600 text-white mt-4 font-semibold py-2 px-4 rounded-lg transition duration-200" href="{{ route('edit-single-artwork',$artwork->id) }}">Редактирай "{{ $artwork->name }}"</a>
        <div></div>
     </div>
  @endforeach
  

</div>
 
@endsection

@section('scripts')
  <script>
     let category = document.getElementById('category_id');
     let period = document.getElementById('period');
     let pastel_period = `
           <label class="block text-sm font-medium text-gray-700 mb-1">Период</label>
            <select
            name="period"
            required
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option selected disabled value="">Избери Период</option>
                <option value="1">2008-2012</option>
                <option value="2">2013-2022</option>
                <option value="3">2022-2025</option>
            </select>`;
    let akvarel_period = `
           <label class="block text-sm font-medium text-gray-700 mb-1">Период</label>
            <select
            name="period"
            required
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option selected disabled value="">Избери Период</option>
                <option value="4">2008-2012</option>
                <option value="5">2013-2022</option>
                <option value="6">2022-2025</option>
            </select>`
    let masleni_period =` <label class="block text-sm font-medium text-gray-700 mb-1">Период</label>
            <select
            name="period"
            required
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option selected disabled value="">Избери Период</option>
                <option value="7">2010-2020</option>
                <option value="8">2020-2025</option>
            </select>`
    let others_period = `<label class="block text-sm font-medium text-gray-700 mb-1">Период</label>
            <select
            name="period"
            required
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option selected disabled value="">Избери Тип</option>
                <option value="9">Инсталации</option>
                <option value="10">Илюстрации</option>
                <option value="11">Проекти</option>
                <option value="12">Стенопис</option>
            </select>`;
     category.addEventListener('change',function(){
        if(this.value == 1){
           period.innerHTML = pastel_period;
        }
        else if(this.value ==2){
            period.innerHTML = akvarel_period;
        }
        else if(this.value ==3){
          period.innerHTML = masleni_period;
        }
        else if(this.value ==4){
          period.innerHTML = others_period;
        }
     })
  </script>
@endsection