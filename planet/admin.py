from django.contrib import admin

from planet.models import MoneyCurrency, Price, ProductGroup, Product


class PriceInline(admin.TabularInline):
    """Price Inline."""
    model = Price


@admin.register(MoneyCurrency)
class MoneyCurrencyAdmin(admin.ModelAdmin):
    list_display = ('currency', )
    search_fields = ('currency', )


@admin.register(Price)
class PriceAdmin(admin.ModelAdmin):
    list_display = ('currency', 'pricing_type', 'price', )
    list_filter = ('pricing_type', )
    search_fields = ('currency__currency', )


@admin.register(ProductGroup)
class ProductGroupAdmin(admin.ModelAdmin):
    list_display = ('name', 'slug', )
    search_fields = ('name', 'description', )
    prepopulated_fields = {'slug': ('name', )}


@admin.register(Product)
class ProductAdmin(admin.ModelAdmin):
    list_display = ('name', 'slug', 'featured', 'in_stock', )
    list_filter = ('featured', 'in_stock', )
    search_fields = ('name', 'description', )
    prepopulated_fields = {'slug': ('name', )}
    inlines = [PriceInline, ]
