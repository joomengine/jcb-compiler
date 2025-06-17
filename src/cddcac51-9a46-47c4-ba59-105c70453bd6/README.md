### JCB! Power
# abstract class FilterHelper (Details)
> namespace: **VDM\Joomla\Componentbuilder\Utilities**

```uml
@startuml

abstract FilterHelper  #Orange {
  + {static} extensions() : string
  + {static} names(string $type, ?string $limiter = null) : ?array
  + {static} linked(string $guid, string $method) : ?array
  + {static} namespaces() : ?array
  + {static} namegroup(string $namespace) : ?array
  + {static} translation(string $extension, string $type) : ?array
  + {static} translations(string $language, bool $translated = true) : ?array
  + {static} languages() : ?array
  + {static} paths(string $path) : ?array
  + {static} repositories(int $target) : ?array
  - {static} joomla_component_admin_views(string $guid) : ?array
  - {static} joomla_component_custom_admin_views(string $guid) : ?array
  - {static} joomla_component_site_views(string $guid) : ?array
  - {static} joomla_component(string $guid) : ?array
  - {static} joomla_module(string $guid) : ?array
  - {static} joomla_plugin(string $guid) : ?array
  - {static} admin_view(string $guid) : ?array
}

note right of FilterHelper::extensions
  get extensions grouped list xml

  since: 3.2.0
  return: string
end note

note left of FilterHelper::names
  Get by type the guids and system names

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::linked
  get any area linked GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::namespaces
  get the substrings of the namespace until the last "\" or "."

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::namegroup
  get get IDs of powers matching namespaces

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::translation
  get translation extension guids

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::translations
  get translation ids

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::languages
  get available languages

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::paths
  get get IDs of powers link to this path

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::repositories
  get available repositories of target area

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_component_admin_views
  Get a component admin views GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_component_custom_admin_views
  get a component custom admin views GUIDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_component_site_views
  get a component site views GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_component
  get a component fields GUIDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_module
  get a module fields GUIDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_plugin
  get a plugin fields GUIDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::admin_view
  get an admin view fields GUIDs

  since: 3.2.0
  return: ?array
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
Super---cddcac51_9a46_47c4_ba59_105c70453bd6---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")