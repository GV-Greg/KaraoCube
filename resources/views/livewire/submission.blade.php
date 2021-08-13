<div>
    <tr class="my-1 bg-blueGray-600 hover:bg-green-700">
        <td class="pl-2 pt-1 pb-2 border-4 border-r-0 border-blueGray-800">{{ $submission->id }}</td>
        <td class="pl-2 pt-1 pb-2 border-4 border-l-0 border-r-0 border-blueGray-800">{{ $submission->singer }}</td>
        <td class="pt-1 pb-2 border-4 border-l-0 border-r-0 border-blueGray-800">{{ $submission->song }}</td>
        <td class="pt-1 pb-2 border-4 border-l-0 border-r-0 border-blueGray-800">
            <div class="flex items-center mx-auto">
                <span class="mx-auto px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $submission->status_color }}-600 text-{{ $submission->status_color }}-50">
                    {{ $submission->status }}
                </span>
            </div>
        </td>
        <td class="pt-1 pb-2 border-4 border-l-0 border-r-0 border-blueGray-800 text-center">{{ $submission->heure }}</td>
        <td class="pt-1 pb-2 border-4 border-l-0 border-blueGray-800">
            <div class="flex items-center mx-auto">
                @if($submission->status === 'new')
                    <a href="{{ route('submission.update', $submission->id) }}" class="mx-auto outline-none">
                        <i class="fas fa-microphone-alt-slash fa-lg text-{{ $submission->status_color }}-500"></i>
                    </a>
                @else
                    <span class="mx-auto">
                        <i class="fas fa-microphone-alt fa-lg text-{{ $submission->status_color }}-500"></i>
                    </span>
                @endif
            </div>
        </td>
    </tr>
</div>
