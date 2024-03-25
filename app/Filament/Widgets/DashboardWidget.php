<?php

namespace App\Filament\Widgets;

use App\Models\Guest;
use App\Models\Room;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Guest', Guest::count())
                ->description('Guest baru akan bertambah.')
                ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
                ->chart([2,4,6,10,20,60])
                ->color('success'),
            Stat::make('All Room', Room::count())
                ->description('Room baru akan ditambahkan.')
                ->descriptionIcon('heroicon-m-rocket-launch', IconPosition::Before)
                ->chart([2,4,6,10,20,60])
                ->color('info'),
            Stat::make('Done Guest', Guest::where('status', false)->count())
                ->description('Guest yang telah selesai.')
                ->descriptionIcon('heroicon-m-check-badge', IconPosition::Before)
                ->chart([2,4,6,10,20,60])
                ->color('gray')
        ];
    }
}
