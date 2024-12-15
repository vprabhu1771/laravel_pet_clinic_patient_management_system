<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

use App\Enums\Gender;
use App\Models\Owner;

class ListOwners extends ListRecords
{
    protected static string $resource = OwnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'Male' => Tab::make()
                ->badge(Owner::query()->where('gender', Gender::MALE)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('gender', Gender::MALE)),
            'Female' => Tab::make()
                ->badge(Owner::query()->where('gender', Gender::FEMALE)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('gender', Gender::FEMALE)),                        
        ];
    }
}
