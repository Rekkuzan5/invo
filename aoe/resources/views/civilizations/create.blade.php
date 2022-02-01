@extends('layout.app')

@section('content')
    <div class="container mx-auto">
                <form class="flex flex-col mt-6" action="/civilizations" method="POST">
                    @csrf
                    <label class="font-bold" for="name">Empire name:</label>
                    <input class="border-solid border-2 border-black-100 rounded-md h-10 pl-2" type="text" id="name" name="name" value="" required><br>
                    <label class="font-bold" for="expansion">Expansion name:</label>
                    <select class="border-solid border-2 border-black-100 rounded-md h-10 pl-2" name="expansion" id="expansion" value="" required>
                        <option value="The Conquerors">The Conquerors</option>
                        <option value="Age of Kings">Age of Kings</option>
                        <option value="African Kingdoms">African Kingdoms</option>
                        <option value="Rise of Rajas">Rise of Rajas</option>
                        <option value="Forgotten Empires">Forgotten Empires</option>
                    </select><br>
                    <label class="font-bold" for="army_type">Army Type:</label>
                    <select class="border-solid border-2 border-black-100 rounded-md h-10 pl-2" name="army_type" id="army_type" value="" required>
                        <option value="Infantry and Monk">Infantry and Monk</option>
                        <option value="Foot Archer">Foot Archer</option>
                        <option value="Defensive">Defensive</option>
                        <option value="Infantry">Infantry</option>
                        <option value="Archer">Archer</option>
                        <option value="Cavalry">Cavalry</option>
                        <option value="Tower and naval">Tower and naval</option>
                        <option value="Cavalry Archer">Cavalry Archer</option>
                        <option value="Camel and naval">Camel and naval</option>
                        <option value="Gunpowder and Monk">Gunpowder and Monk</option>
                        <option value="Gunpowder">Gunpowder</option>
                        <option value="Infantry and naval">Infantry and naval</option>
                        <option value="Calvary and Naval">Calvary and Naval</option>
                        <option value="Monk and Elephant">Monk and Elephant</option>
                        <option value="Gunpowder and Cavalry">Gunpowder and Cavalry</option>
                        <option value="Archer and naval">Archer and naval</option>
                        <option value="Siege and Elephant Civilzation">Siege and Elephant Civilzation</option>
                        <option value="Naval and Gunpowder">Naval and Gunpowder</option>
                        <option value="Calvary Infantry">Calvary Infantry</option>
                    </select><br>
                    <label class="font-bold" for="team_bonus">Team bonus:</label>
                    <input class="border-solid border-2 border-black-100 rounded-md h-10 pl-2" type="text" id="team_bonus" name="team_bonus" value="" required><br>
                    <label class="font-bold" for="civilization_bonus">Civilization bonus:</label>
                    <textarea class="border-solid border-2 border-black-100 rounded-md h-32 pl-2" id="civilization_bonus" name="civilization_bonus" required></textarea><br>
                    <button class="h-10 px-5 w-60 mt-6 text-blue-100 transition-colors duration-150 bg-blue-700 rounded-lg focus:shadow-outline hover:bg-blue-800" type="submit">Create Civilization</button>                  
                </form>
            <div class="mt-8">
                <a class="hover:text-blue-400" href="/">&#8592; Back to civilizations</a>
            </div>
        </div>
    </div>
@endsection