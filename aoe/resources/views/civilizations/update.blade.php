{{-- @extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div>
                <h1>Add a New Empire</h1>
                <form action="/civilizations/update" method="POST">
                    @csrf
                    <label for="name">Empire name:</label>
                    <input type="text" id="name" name="name" value="{{ $civilization->name }}"><br>
                    <label for="expansion">Expansion name:</label>
                    <select name="expansion" id="expansion" value="{{ $civilization->expansion }}">
                        <option value="The Conquerors">The Conquerors</option>
                        <option value="Age of Kings">Age of Kings</option>
                        <option value="African Kingdoms">African Kingdoms</option>
                        <option value="Rise of Rajas">Rise of Rajas</option>
                        <option value="Forgotten Empires">Forgotten Empires</option>
                    </select><br>
                    <label for="army_type">Army Type:</label>
                    <select name="army_type" id="army_type" value="{{ $civilization->army_type }}">
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
                    <label for="team_bonus">Team bonus:</label>
                    <input type="text" id="team_bonus" name="team_bonus" value="{{ $civilization->team_bonus }}"><br>
                    <label for="civilization_bonus">Civilization_bonus:</label>
                    <input type="text" id="civilization_bonus" name="civilization_bonus" value="{{ $civilization->civilization_bonus }}"><br>
                    <input type="submit" value="Update Empire">
                </form>
            </div>
        </div>
    </div>
@endsection --}}