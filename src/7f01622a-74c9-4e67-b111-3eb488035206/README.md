### JCB! Power
# final class Permission (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml

class Permission << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # PermissionCore $permissioncore
  # PermissionViews $permissionviews
  # PermissionAction $permissionaction
  # PermissionComponent $permissioncomponent
  # PermissionGlobalAction $permissionglobalaction
  # PermissionDashboard $permissiondashboard
  # Counter $counter
  # Language $language
  # array $permissions
  # string $nameList
  # string $nameListLower
  # string $nameSingleLower
  + __construct(Config $config, PermissionCore $permissioncore, ...)
  + getAction(string $nameView, string $action) : ?string
  + getGlobal(string $nameView, string $action) : string
  + actionExist(string $nameView, string $action) : bool
  + globalExist(string $nameView, string $action) : bool
  + set(array $view, string $nameView, ...) : void
  - build(array $view, string $nameView, ...) : void
  - setDashboard(string $nameView, string $nameViews, ...) : void
  - initialise(array $view, string $type) : bool
  - initPort(int $port) : void
  - initHistory(int $history) : void
  - initBatch(string $type) : void
  - setNames(object $settings, string $customName, ...) : void
  - getTitle(string $nameBuilder, string $customName) : string
  - getDescription(string $nameBuilder, string $customName) : string
  - getCore(string $nameView, string $action) : ?string
}

note right of Permission::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    PermissionCore $permissioncore
    PermissionViews $permissionviews
    PermissionAction $permissionaction
    PermissionComponent $permissioncomponent
    PermissionGlobalAction $permissionglobalaction
    PermissionDashboard $permissiondashboard
    Counter $counter
    Language $language
end note

note left of Permission::getAction
  Get the permission action

  since: 3.2.0
  return: ?string
end note

note right of Permission::getGlobal
  Get the global permission action

  since: 3.2.0
  return: string
end note

note left of Permission::actionExist
  Check if the permission action exist

  since: 3.2.0
  return: bool
end note

note right of Permission::globalExist
  Check if the global permission action exist

  since: 3.2.0
  return: bool
end note

note left of Permission::set
  Set the permissions

  since: 3.2.0
  return: void
  
  arguments:
    array $view
    string $nameView
    string $nameViews
    array $menuControllers
    string $type = 'admin'
end note

note right of Permission::build
  Build of permissions

  since: 3.2.0
  return: void
  
  arguments:
    array $view
    string $nameView
    string $nameViews
    array $menuControllers
    string $type = 'admin'
end note

note left of Permission::setDashboard
  Set dashboard permissions

  since: 3.2.0
  return: void
  
  arguments:
    string $nameView
    string $nameViews
    array $menuControllers
    string $action
    string $coreTarget
end note

note right of Permission::initialise
  Initialise build of permissions

  since: 3.2.0
  return: bool
end note

note left of Permission::initPort
  Initialise build of import and export permissions

  since: 3.2.0
  return: void
end note

note right of Permission::initHistory
  Initialise build of history permissions

  since: 3.2.0
  return: void
end note

note left of Permission::initBatch
  Initialise build of batch permissions

  since: 3.2.0
  return: void
end note

note right of Permission::setNames
  Initialise build of names used in permissions

  since: 3.2.0
  return: void
  
  arguments:
    object $settings
    string $customName
    string $type
end note

note left of Permission::getTitle
  Get the dynamic title

  since: 3.2.0
  return: string
end note

note right of Permission::getDescription
  Get the dynamic description

  since: 3.2.0
  return: string
end note

note left of Permission::getCore
  Get the core permission action

  since: 3.2.0
  return: ?string
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
Super---7f01622a_74c9_4e67_b111_3eb488035206---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")