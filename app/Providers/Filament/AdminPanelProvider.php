<?php

namespace App\Providers\Filament;

use App\Filament\Resources\AccordionQuestionsResource;
use App\Filament\Resources\ArticleResource;
use App\Filament\Resources\CourseResource;
use App\Filament\Resources\FeatureResource;
use App\Filament\Resources\PriceResource;
use App\Filament\Resources\ProfileResource;
use App\Filament\Resources\ProgramFeeResource;
use App\Filament\Resources\ProgramResource;
use App\Filament\Resources\ServiceResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->brandName('Bright Execelent English')
            ->favicon(asset('img/logo-Transparant.png'))
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->sidebarCollapsibleOnDesktop()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder->groups([
                    NavigationGroup::make()
                        ->items([
                            NavigationItem::make('Dashboard')
                                ->icon('heroicon-o-squares-2x2')
                                ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.dashboard'))
                                ->url(fn (): string => Dashboard::getUrl()),
                        ]),
                    NavigationGroup::make('Post')
                        ->items([
                            ...ArticleResource::getNavigationItems(),
                            ...AccordionQuestionsResource::getNavigationItems(),
                            ...ServiceResource::getNavigationItems(),
                            ...FeatureResource::getNavigationItems(),
                        ]),
                    NavigationGroup::make('Course')
                        ->items([
                            ...CourseResource::getNavigationItems(),
                            ...ProgramResource::getNavigationItems(),
                            ...ProgramFeeResource::getNavigationItems(),
                            ...PriceResource::getNavigationItems(),
                        ]),
                    NavigationGroup::make('Setiing')
                        ->items([
                            ...ProfileResource::getNavigationItems(),
                        ]),
                ]);
            });
    }
}
