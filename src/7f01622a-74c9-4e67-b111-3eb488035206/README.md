```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---7f01622a_74c9_4e67_b111_3eb488035206---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

