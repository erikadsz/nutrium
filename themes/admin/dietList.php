<?php
    echo $this->layout("_theme");
?>

<div class="diet-container">
        <h1 class="h1Diet">Lista de Dietas</h1>

        <div class="diet-card">
            <h2 class="diet-title">Dieta Low Carb</h2>
            <div class="meal-list">
                <div class="meal-card">
                    <h3>Refeição da Manhã</h3>
                    <p><strong>Descrição:</strong> Omelete com espinafre</p>
                    <p><strong>Calorias:</strong> 300 kcal</p>
                    <div class="button-container">
                        <button class="button" onclick="editMeal(this)">Editar</button>
                        <button class="button button-delete" onclick="deleteMeal(this)">Excluir</button>
                    </div>
                </div>
                <div class="meal-card">
                    <h3>Almoço</h3>
                    <p><strong>Descrição:</strong> Frango grelhado com salada</p>
                    <p><strong>Calorias:</strong> 500 kcal</p>
                    <div class="button-container">
                        <button class="button" onclick="editMeal(this)">Editar</button>
                        <button class="button button-delete" onclick="deleteMeal(this)">Excluir</button>
                    </div>
                </div>
                <div class="meal-card">
                    <h3>Jantar</h3>
                    <p><strong>Descrição:</strong> Sopa de legumes</p>
                    <p><strong>Calorias:</strong> 250 kcal</p>
                    <div class="button-container">
                        <button class="button" onclick="editMeal(this)">Editar</button>
                        <button class="button button-delete" onclick="deleteMeal(this)">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="diet-card">
            <h2 class="diet-title">Dieta Mediterrânea</h2>
            <div class="meal-list">
                <div class="meal-card">
                    <h3>Café da Manhã</h3>
                    <p><strong>Descrição:</strong> Iogurte com frutas e granola</p>
                    <p><strong>Calorias:</strong> 350 kcal</p>
                    <div class="button-container">
                        <button class="button" onclick="editMeal(this)">Editar</button>
                        <button class="button button-delete" onclick="deleteMeal(this)">Excluir</button>
                    </div>
                </div>
                <div class="meal-card">
                    <h3>Almoço</h3>
                    <p><strong>Descrição:</strong> Salada de atum com legumes</p>
                    <p><strong>Calorias:</strong> 600 kcal</p>
                    <div class="button-container">
                        <button class="button" onclick="editMeal(this)">Editar</button>
                        <button class="button button-delete" onclick="deleteMeal(this)">Excluir</button>
                    </div>
                </div>
                <div class="meal-card">
                    <h3>Jantar</h3>
                    <p><strong>Descrição:</strong> Peixe grelhado com quinoa</p>
                    <p><strong>Calorias:</strong> 400 kcal</p>
                    <div class="button-container">
                        <button class="button" onclick="editMeal(this)">Editar</button>
                        <button class="button button-delete" onclick="deleteMeal(this)">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Adicione mais dietas conforme necessário -->
    </div>