from cms.plugin_base import CMSPluginBase
from cms.plugin_pool import plugin_pool
from django.utils.translation import ugettext_lazy as _

from planet.models import (
    ProductGroupPluginModel,
    TeamPluginModel,
    TeamMemberPluginModel,
)


@plugin_pool.register_plugin
class ProductGroupPluginPublisher(CMSPluginBase):
    model = ProductGroupPluginModel
    name = _('Product Group')
    render_template = 'planet/cms/product_group.html'

    def render(self, context, instance, placeholder):
        context.update({'instance': instance})
        return context


@plugin_pool.register_plugin
class TeamPluginPublisher(CMSPluginBase):
    model = TeamPluginModel
    name = _('Team')
    render_template = 'planet/cms/team.html'

    def render(self, context, instance, placeholder):
        context.update({'instance': instance})
        return context


@plugin_pool.register_plugin
class TeamMemberPluginPublisher(CMSPluginBase):
    model = TeamMemberPluginModel
    name = _('Team Member')
    render_template = 'planet/cms/team_member.html'

    def render(self, context, instance, placeholder):
        context.update({'instance': instance})
        return context
