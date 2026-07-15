@extends('admin.template')

@section('content')
    
    <img src="{{ asset('images/artwork') }}/{{ $artwork->image }}" alt="" style="width:50%;margin:0 auto;">
    <hr>

    <div class="mx-auto w-full">
        <form class="bg-white p-6 rounded-2xl shadow-md w-full max-w-md space-y-4 mx-auto" action="{{ route('update-artork',$artwork->id) }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
            <h2 class="text-2xl font-semibold text-gray-800">Редактирай картина</h2>
            @if($errors->all())
              <p class="text-red">{{ $errors->all()[0] }}</p>
            @endif

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Име на картината (Български)</label>
      <input
        name="name"
        type="text" 
        required
        placeholder=""
        value="{{ $artwork->name }}"
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
        value="{{ $artwork->name_en }}"
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>
   
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Кратко описание (Български) (опционално)</label>
      <input 
        name="description"
        type="text" 
        placeholder=""
        value="{{ $artwork->description }}"
        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Кратко описание (Английски) (опционално)</label>
      <input 
        name="description_en"
        type="text" 
        placeholder=""
        value="{{ $artwork->description_en }}"
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
          <option value="{{ $category->id }}" {{ $category->id == $artwork->category_id ? ' selected ' : '' }}>{{ $category->name }}</option>
        @endforeach
        
      </select>
    </div>

    <div>
     
         <label class="block text-sm font-medium text-gray-700 mb-1">Период</label>
          <select
          name="period"
          id="period"
          required
          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option selected disabled value="">Избери Период</option>
              @if($artwork->category_id == 1)
                  <option value="1" {{ $artwork->period == 1 ? 'selected' : '' }}>2008-2012</option>
                  <option value="2" {{ $artwork->period == 2 ? 'selected' : '' }}>2013-2022</option>
                  <option value="3" {{ $artwork->period == 3 ? 'selected' : '' }}>2022-2025</option>
              @elseif ($artwork->category_id == 2)
                  <option value="4" {{ $artwork->period == 4 ? 'selected' : '' }}>2008-2012</option>
                  <option value="5" {{ $artwork->period == 5 ? 'selected' : '' }}>2013-2022</option>
                  <option value="6" {{ $artwork->period == 6 ? 'selected' : '' }}>2022-2025</option>
              @elseif ($artwork->category_id == 3)
                  <option value="7" {{ $artwork->period == 7 ? 'selected' : '' }}>2010-2020</option>
                  <option value="8" {{ $artwork->period == 8 ? 'selected' : '' }}>2020-2025</option>
              @elseif ($artwork->category_id == 4)
                  <option value="9" {{ $artwork->period == 9 ? 'selected' : '' }}>Инсталации</option>
                  <option value="10" {{ $artwork->period == 10 ? 'selected' : '' }}>Илюстрации</option>
                  <option value="11" {{ $artwork->period == 11 ? 'selected' : '' }}>Проекти</option>
                  <option value="12" {{ $artwork->period == 12 ? 'selected' : '' }}>Стенопис</option>
              @endif
          </select>
    
    </div>

    <!-- File Input -->
    <div style="margin:0 auto;">
      <label class="block text-sm font-medium text-gray-700 mb-1">Избери файл (опционално)</label>
      <input
        name="file"
        type="file"
        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 
               file:rounded-lg file:border-0 
               file:text-sm file:font-semibold 
               file:bg-blue-50 file:text-blue-700 
               hover:file:bg-blue-100"
      >
    </div>
    
    <input type="checkbox" name="is_selected" {{ $artwork->is_selected ? ' checked ' : '' }}> Избрани Картини
    <!-- Submit -->
    <button 
      type="submit"
      class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition"
    >
      Редактирай картината
    </button>
  </form>
  </div>

  <div class="w-100 text-right">
    
    <form action="{{ route('delete-artwork',$artwork->id) }}" method="POST" onsubmit="return confirm('Картината ще бъде изтрита! Потвърдете');">
      {{ csrf_field() }}
      <button 
      type="submit"
      class="w-auto bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition"
    >Изтрий картината</button>
    </form>
  </div>

 
 
@endsection

@section('scripts')
  <script>
     let category = document.getElementById('category_id');
     let period = document.getElementById('period');
     let pastel_period = `<option selected disabled value="">Избери Период</option>
                          <option value="1">2008-2012</option>
                          <option value="2">2013-2022</option>
                          <option value="3">2022-2025</option>`;
    let akvarel_period = `<option selected disabled value="">Избери Период</option>
                          <option value="4">2008-2012</option>
                          <option value="5">2013-2022</option>
                          <option value="6">2022-2025</option>`
    let masleni_period =` <option selected disabled value="">Избери Период</option>
                          <option value="7">2010-2020</option>
                          <option value="8">2020-2025</option>`
    let others_period = ` <option selected disabled value="">Избери Тип</option>
                          <option value="9">Инсталации</option>
                          <option value="10">Илюстрации</option>
                          <option value="11">Проекти</option>
                          <option value="12">Стенопис</option>`;
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