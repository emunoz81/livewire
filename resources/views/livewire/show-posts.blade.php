<div>

    <h1>hola mumdo </h1>    
    

    <!-- This example requires Tailwind CSS v2.0+ -->
    
    <x-table>
    {{$search}}
        <div class="px-6 py-4">
           <!-- <input type="text" wire:model="search"> -->
           
           <x-jet-input calss="w-full" placeholder="escriba lo que quiera buscar" type="text" wire:model="search" />
           @livewire('create-post')
        </div>
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('id')">ID</th>
              <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('tittle')">Title</th>
              
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('content')">Content</th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            
          @foreach($posts as $post)
            <tr>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-900">
                    {{$post->id}}
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{$post->title}} </span>
              </td>
              <td class="px-6 py-4 ">{{$post->content}}</td>
              <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                @livewire('edit-post',['post'=> $post], key($post->id))
              </td>
            </tr>
          @endforeach

            <!-- More people... -->

            
          </tbody>
        </table>
       {{ $posts->links() }}
    </x-table>
</div>