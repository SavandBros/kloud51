from modeltranslation.translator import translator, TranslationOptions

from planet.models import Product, ProductGroup, Team, TeamMember


class ProductTranslationOptions(TranslationOptions):
    fields = ('slug', 'name', 'description', 'info', 'label', 'order_link', )


class ProductGroupTranslationOptions(TranslationOptions):
    fields = ('slug', 'name', 'description', )


class TeamTranslationOptions(TranslationOptions):
    fields = ('name', )


class TeamMemberTranslationOptions(TranslationOptions):
    fields = ('name', 'bio', )


translator.register(Product, ProductTranslationOptions)
translator.register(ProductGroup, ProductGroupTranslationOptions)
translator.register(Team, TeamTranslationOptions)
translator.register(TeamMember, TeamMemberTranslationOptions)
