<div class="flex flex-auto justify-between bg-grey-lighter rounded p-6 my-4">
    <div class="flex">
        <div class="min-w-83">
            <i class="fas fa-trophy text-{{ config("scores.position.{$loop->iteration}", 'grey') }}"></i>
            <span class="ml-4">{{ $score->points }}</span>
        </div>
        <div>
            <span class="ml-4">{{ $score->game }}</span>
        </div>
    </div>
    <div>
        <span class="text-grey-dark">{{ $score->date->format('Y-m-d') }}</span>
    </div>
</div>