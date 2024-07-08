```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class AccessSections (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class AccessSections << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Event $event
  # Language $language
  # Component $component
  # FieldName $fieldname
  # TypeName $typename
  # Counter $counter
  # Permission $permission
  # AssetsRules $assetsrules
  # CustomTabs $customtabs
  # PermissionViews $permissionviews
  # PermissionFields $permissionfields
  # PermissionComponent $permissioncomponent
  # CustomButtonPermissions $custombuttonpermissions
  + __construct(Config $config, Event $event, ...)
  + get() : string
}

note right of AccessSections::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Event $event
    Language $language
    Component $component
    FieldName $fieldname
    TypeName $typename
    Counter $counter
    Permission $permission
    AssetsRules $assetsrules
    CustomTabs $customtabs
    PermissionViews $permissionviews
    PermissionFields $permissionfields
    PermissionComponent $permissioncomponent
    CustomButtonPermissions $custombuttonpermissions
end note

note right of AccessSections::get
  Get Access Sections

  since: 3.2.0
  return: string
end note
 
@enduml
```

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

