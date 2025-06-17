### JCB! Power
# class Router (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**

```uml
@startuml

class Router  #Gold {
  # Config $config
  # Dispenser $dispenser
  # Builder $builder
  # array $guiMapper
  # array $targets
  + __construct(Config $config, Dispenser $dispenser, ...)
  + set(object $item) : void
  # getSiteViews(array $siteViews, array $adminViews) : array
  # getSiteEditViews(?array $views) : array
  # getSiteViewAliasKey(?string $viewName, array $adminViews) : ?string
  # getSiteEditViewAliasKey(?array $fields) : ?string
  # getMainSelection(?array $gets) : array
}

note right of Router::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Dispenser $dispenser
    Builder $builder
end note

note right of Router::set
  Set Router

  since: 3.2.0
  return: void
end note

note right of Router::getSiteViews
  Get the array of site views with additional details.
This method processes each site view to enrich it with additional details such as the associated table,
alias keys, and other relevant information. The enrichment is based on the view's settings and the admin views.

  since: 3.2.0
  return: array
end note

note right of Router::getSiteEditViews
  Get the array of site edit views
This method processes the provided admin views to extract and return an array of site edit views.
Each site edit view is constructed based on specific conditions from the admin view's settings.

  since: 3.2.0
  return: array
end note

note right of Router::getSiteViewAliasKey
  Get the site edit view alias key value
This method fetches the alias keys for a given site edit view by matching the view name
against a list of admin views. It processes the admin views to find a match and then
retrieves the alias keys from the matched view's settings.

  since: 3.2.0
  return: ?string
end note

note right of Router::getSiteEditViewAliasKey
  Get the site view alias key value

  since: 3.2.0
  return: ?string
end note

note right of Router::getMainSelection
  Get the view (main selection) table and view name value
from the main get object

  since: 3.2.0
  return: array
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---402239e6_ceec_4ee0_af62_22d462417bf6---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")