<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

// Models
use App\Enums\Gender;
use App\Models\Patient;

class ListPatients extends ListRecords
{
    protected static string $resource = PatientResource::class;

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
            'Cat' => Tab::make()
                ->badge(Patient::query()->where('type', 'cat')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'cat')),
            'Dog' => Tab::make()
                ->badge(Patient::query()->where('type', 'dog')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'dog')),
            'Rabbit' => Tab::make()
                ->badge(Patient::query()->where('type', 'rabbit')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'rabbit')),
        ];
    }
}
